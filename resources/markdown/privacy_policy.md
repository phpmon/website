## Introduction

PHP Monitor collects some user data required to keep the app functional (for internal checks), but does NOT transmit that information.

The developer feels very strongly about not collecting any personal user data (PII). However, broadcasting some data cannot be avoided for certain features.

You can learn more about that here. The developer of PHP Monitor does provide an API (endpoint) that the app connects to, in order to check for updates, if you choose not to disable this optional feature.

## Analytics

Any information about number of unique users is derived via the legitimate data available via the update check endpoint and crash reports, which informs me how the app needs to be scaled, and which bugs need to be fixed, if necessary.

PHP Monitor DOES NOT broadcast data about individual feature usage or any such. 

Some internal "usage" counts are kept, for example to determine whether after some use the sponsorship message can be displayed. This data is collected, but NOT broadcast, so it remains private to you.

## Crash reports

Crash reports can be sent via the API the developer has built for PHP Monitor. When the app has crashed, the user has the option to send the crash report. 

### Sending the crash report

Sending the crash report does not happen automatically, the user has to consent to sending this information to the developer. 

These crash reports are used to identify issues in the app that I (the developer) can then identify, reproduce and fix.

### What's in a crash report

The information included in a de-symbolicated crash report is:

- A unique crash identifier
- What version of macOS you were running
- What version of PHP Monitor you were running
- Where PHP Monitor was located on your system (usually `/Applications`)
- What hardware you were using
- What kind of architecture your computer uses (ARM or Intel)
- When the crash occurred
- What type of exception occurred
- A list of threads, including the crashed one
- Additional address range information for binaries

No personal information like email address, username, computer name or anything that could personally identify you is collected.

These crash reports can be inspected prior to sending them by pressing the "help" button when the app offers to share the crash report.

## Checking for updates

### Understanding update checks

When checking for updates (normally every 24 hours), the app will request the latest version of the app by contacting the server. To receive an accurate response, the app broadcasts the following required information:

- **What version of macOS is currently being used.** This is relevant because I want to prevent clients running on versions of macOS that won’t be supported for future releases to not get a notice about updates.

- **What version and build of PHP Monitor is currently being used.** This one seems rather obvious, but without knowing what version is currently being used, the app can’t determine if a newer version is available. This bit of info is also relevant to point #1 above.

### What information is stored?

For historical and analytics purposes, this information is logged to the database and currently retained indefinitely, although I suspect this will be changed in the future. 

A user's IP address also reaches the API when checking for updates (as a consequence of using the internet), but this information is anonymized when saved to the database. 

This way, the data can still be used to prevent bad actors from doing too many requests to my server, while not impacting the privacy of users, who remain anonymous and cannot be tracked.

Despite this careful approach, if you do not want the app to send any information from your system, you can always disable the automatic update check.

For a more detailed insight into how the update check works, you can also read [my detailed technical blog post](https://nicoverbruggen.be/blog/phpmon-2025-and-beyond#content-php-monitor-2509-improved-update-checking), which you may find interesting.

## Open source, yay!

### Can I examine the source code myself?

You can inspect how PHP Monitor does things by inspecting the latest code. PHP Monitor is an open source project available [on GitHub](https://github.com/nicoverbruggen/phpmon). 

### Is the source code of the API available?

The source code of the API is not (currently) publicly available, but [this website](https://github.com/phpmon/website) is. I am currently considering open sourcing the API, too.

## On third-party software

PHP Monitor makes use of the Homebrew installation and Laravel Valet installed on the user's system. The user is responsible for investigating how any third-party software uses analytics. 

- You can learn more about how [Homebrew]((https://docs.brew.sh/Analytics)) collects analytics. I've also included a little bit of information about this in the README.
- For certain other update checks (i.e. checking if there are any updates to Laravel Valet), the app may connect to other services, like [Packagist](https://packagist.org/).
