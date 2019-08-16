# infrastructure-opsone-dba (phpMyAdmin)

Stable phpMyAdmin for installation on an [OpsOne Managed Server PaaS](https://opsone.ch/hosting/managed-server).

## Installation

### Website configuration

Browse to the [OpsOne Cockpit](https://cockpit.opsone.ch) and update the
settings to the following configuration:

* `ENV` to `PROD`
* `Type` to `php72` (PHP 7.1.3 or higher is required)
* `DB type` to `mysql`
* `DB password` click `Generate`
* `Let's Encrypt` checked
* `Tags` to what you like to have
* Click the `Save` button

### Installation over ssh

Open a ssh terminal to the website and run the following command in your user
home directory:

* `wget https://github.com/gilbertsoft/infrastructure-opsone-dba/raw/master/install && chmod +x install && ./install`

or for a composer based installation (see <https://github.com/gilbertsoft/infrastructure-opsone-dba-installer>)

* `composer create-project gilbertsoft/dba-opsone`

Now the phpMyAdmin instance is running and accessible over http(s).

### Customize the configuration

To customize the configuration change the `config.inc.php` in the user home
directory to your needs. A out of the box running preconfiguration is already
created.

## Update

Updates are automatically done by a daily cron job.

For a manual update ssh into the website and run the following command in your
user home directory:

* `./update`

## License

GPL-3.0 or later
