## Introduction

The developer feels very strongly about not collecting any personal user data (PII). However, broadcasting some data cannot be avoided for certain features, especially those related to online functionality that requires the use of the PHP Monitor API. 

You can learn more about what data is sent to the server under what circumstances in this document.

**Despite this careful approach, if you do not want the app to send any information from your system, you can always disable 1) the automatic update check and 2) choose not to send crash reports, which means no data will ever be sent to the developer or any third party.**

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

These crash reports can be inspected prior to sending them by pressing the "help" button when the app offers to share the crash report. (You can inspect the crash report before sending, but cannot modify what data is transmitted. The original report is always sent in full.)

## Checking for updates

### Understanding update checks

When checking for updates (normally every 24 hours), the app will request the latest version of the app by contacting the server. To receive an accurate response, the app broadcasts the following required information:

- **What version of macOS is currently being used.** This is relevant because I want to prevent clients running on versions of macOS that won't be supported for future releases to not get a notice about updates.

- **What version and build of PHP Monitor is currently being used.** This one seems rather obvious, but without knowing what version is currently being used, the app can't determine if a newer version is available. This bit of info is also relevant to point #1 above.

## Analytics

PHP Monitor does not use any third-party analytics services (no telemetry SDKs). There were various good reasons not to integrate these SDKs, so here's what happens instead:

- Any collected metrics are derived exclusively from server logs of update checks and voluntarily submitted crash reports (aggregate counts).

- PHP Monitor does not broadcast data about individual feature usage, but may use some stats to avoid nagging you with repeated alerts. In short, this data remains on your computer and never leaves it.

## Data storage

### What information is stored?

All data related to crash reports and update checks is stored on a secure server that can only be accessed by the developer.

For historical and analytics purposes, this information is logged to the database:

- This historical data is retained for a maximum of 2 years for operational purposes, after which the data is removed and only an aggregate count remains (X amount of unique sessions used the app on day X). 

- In some situations (based on storage needs) this data may be removed even sooner if the database would otherwise grow too large.

- Historical backups may retain data longer for disaster recovery, but are not actively accessed.

A user's IP address also reaches the API when checking for updates (as a consequence of using the internet), but this information is anonymized when saved to the database.

This way, the data can still be used to prevent bad actors from doing too many requests to my server, while not impacting the privacy of users, who remain anonymous and cannot be tracked.

### Can I request my data to be deleted?

Absolutely! You can reach out to [info@phpmon.app](mailto:info@phpmon.app) to request the deletion of data linked to a given UUID, which will most likely be a crash report. 

For example: you must reference the UUID of the crash report, or I won't know which crash report is actually yours.

## Benefits of open source

### Can I examine the source code myself?

You can inspect how PHP Monitor does things by inspecting the latest code. PHP Monitor is an open source project available [on GitHub](https://github.com/nicoverbruggen/phpmon). 

### Is the source code of the API available?

The source code of the API is not (currently) publicly available, but [this website](https://github.com/phpmon/website) is. I am currently considering open sourcing the API, too.

## On third-party software

PHP Monitor makes use of the Homebrew installation and Laravel Valet installed on the user's system. The user is responsible for investigating how any third-party software uses analytics. 

- You can learn more about how [Homebrew](https://docs.brew.sh/Analytics) collects analytics. I've also included a little bit of information about this in the README.
- For certain other update checks (i.e. checking if there are any updates to Laravel Valet), the app may connect to other services, like [Packagist](https://packagist.org/).
