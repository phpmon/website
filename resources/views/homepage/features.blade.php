<div class="px-4">
    <x-feature feature-number="1" feature-title="Get guided through setup" y-position="top" img-src="/images/setup-assistant.jpg?v=2026.05">
        Setup Assistant helps you get from a fresh macOS installation to a machine for PHP development. It can <b>guide you through the entire setup flow</b>, without making you piece together terminal commands by hand. No more need to figure things out yourself.
    </x-feature>
    <x-feature feature-number="2" feature-title="A GUI for managing PHP versions" img-src="/images/version-manager.jpg?v=2025.11" y-position="top" class="lg:flex-row-reverse">
        With the PHP Version Manager, you can easily <b>install, upgrade and remove</b> individual PHP versions without needing to manually type or copy Homebrew commands. The app will also attempt to <b>automatically fix</b> broken PHP versions.
    </x-feature>
    <x-feature feature-number="3" feature-title="Easily manage PHP extensions" img-src="/images/extensions.jpg?v=2025.11" y-position="top">
        With the new PHP Extension Manager, you can easily <b>install and remove</b> PHP extensions, all <b>using a GUI</b>. It is also super easy to manage your extensions on a per PHP version basis via the Domains window (you can right-click on a site and toggle extensions easily).
    </x-feature>
    <x-feature feature-number="4" feature-title="Quickly link a new domain or proxy" img-src="/images/link-folder.jpg?v=2025.11" y-position="top" class="lg:flex-row-reverse">
        You can easily <b>link or proxy</b> a folder: you can even easily customize the name of the domain and secure this new domain by simply checking a box. This will make these projects accessible as *.test domains on your system.
    </x-feature>
    <x-feature feature-number="5" feature-title="All of your domains in a single list" img-src="/images/domains.jpg?v=2025.11" y-position="top">
        Do you have many projects or legacy sites? No worries, the app includes a <b>domain list</b> that you can use to get a quick overview of all domains and proxies you have set up, as well as their PHP version, what type of project they are, and more.
    </x-feature>
    <x-feature feature-number="6" feature-title="A different PHP version per domain" img-src="/images/isolation.jpg?v=2025.11" y-position="bottom" class="lg:flex-row-reverse">
        In addition to offering a global version switcher (which switches the PHP version for all of your projects), this app also includes support for Valet's <b>site isolation</b> feature. This allows you to use a specific version of PHP with a specific domain, all while retaining the globally linked PHP version.
    </x-feature>
    <x-feature feature-number="7" feature-title="Determine compatibility" img-src="/images/phpinfo.jpg?v=2025.11">
        PHP Monitor will help you figure out if your sites are <b>compatible</b> with the <b>currently linked version of PHP</b>. You will receive suggestions when <b>site isolation</b> may be of use for a given domain.
    </x-feature>
    <x-feature feature-number="8" feature-title="Information at a glance" img-src="/images/menu-bar.jpg?v=2025.11" y-position="top" class="lg:flex-row-reverse">
        PHP Monitor lives in your menu bar. From here, you can use the bulk of PHP Monitor's functionality, including the <b>global version switcher</b> as well as <b>services status</b> section.<br/><br/>If everything runs fine it'll be obvious, but if things happen to go wrong PHP Monitor will warn you, and help you figure out what to do.
    </x-feature>
    <x-feature feature-number="9" feature-title="No more hunting for config files" img-src="/images/config.jpg?v=2025.11" y-position="top">
        Sometimes you need to edit a <b>configuration file</b> or <b>toggle an extension</b>. But where are those pesky config files located again? From PHP Monitor's menu you can easily find them. Extensions can even be toggled with one click of the button!
    </x-feature>
    <x-feature feature-number="10" feature-title="Small, frequent, fast and easy updates" img-src="/images/updater.jpg?v=2025.11" y-position="bottom" class="lg:flex-row-reverse">
        The app also comes with an optional (but very fast) <b>built-in updater</b>, which allows you to stay up-to-date with the latest developments and bug fixes, so you can have a seamless PHP switching experience.
    </x-feature>
    <x-feature feature-number="11" feature-title="Totally free & open source" y-position="top" x-position="left" img-src="/images/oss.png?v=7">
        PHP Monitor's source code is, unlike other proprietary products, entirely <b>open source</b>. Also, all features that are part of PHP Monitor are available <b>entirely free of charge</b>, so you don't need to pay for any walled-off features. How great is that?
    </x-feature>
    <div class="flex lg:flex-row flex-col m-auto max-w-5xl py-4 md:py-8 gap-x-10">
        <x-single-feature feature-title="🦶 A tiny footprint">
            Laravel Valet is a lightweight solution that is much leaner than Docker. PHP Monitor as a companion tool uses few system resources: it is light on RAM, and CPU usage is negligible.
        </x-single-feature>
        <x-single-feature feature-title="🇪🇺 Made in Europe">
            Built in Europe. No tracking. No bullshit. Nothing to worry about. Learn more about how your data is respected by reading the
            <a class="underline" href="{{ route('privacy-policy') }}">privacy policy</a>. In plain English!
        </x-single-feature>
        <x-single-feature feature-title="💶 No nagging for donations">
            PHP Monitor will only ask you to donate once after installing it on a new computer. However, if you can, please <a class="underline" href="https://nicoverbruggen.be/sponsor">support the project</a>.
        </x-single-feature>
    </div>
</div>
