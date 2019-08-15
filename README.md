# infrastructure-opsone-dba (phpMyAdmin)

Latest phpMyAdmin for installation on an (OpsOne Managed Server PaaS)<https://opsone.ch/hosting/managed-server>.

## Installation

On a fresh website add the following configuration to the website's
`Custom JSON` configuration. Create a new secret e.g. on
(RandomKeygen)<https://randomkeygen.com/#504_wpa>. Make sure no `"` is
included.

```json
{
  "envvar": {
    "BLOWFISH_SECRET": ""
  }
}
```

SSH to the website and run the following commands:

* `git clone https://github.com/gilbertsoft/infrastructure-opsone-dba.git tmp/dba`
* `mv tmp/dba/.git .git`
* `rm -fr tmp/dba`
* `git reset --hard`
* `setup-dba`

## Update

To update an existing installation run:

* `setup-dba`
