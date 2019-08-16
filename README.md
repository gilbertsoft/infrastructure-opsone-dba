# infrastructure-opsone-dba (phpMyAdmin)

Latest phpMyAdmin for installation on an [OpsOne Managed Server PaaS](https://opsone.ch/hosting/managed-server).

## Installation

In the website details from the cockpit set `ENV` to `PROD` and `Type` to
`php72` (of course other compatible values are possible too). Check the other
configuration values and click the `Save` button. Then ssh into the website
and run the following command in your user home directory:

* `wget https://github.com/gilbertsoft/infrastructure-opsone-dba/raw/master/install && chmod +x install && ./install`

Adapt `config.inc.php` to your needs.

## Update

Updates are automatically done daily by a cron job.

For a manual update ssh into the website and run the following command in your
user home directory:

* `update`

## License

GPL-3.0 or later
