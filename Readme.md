# Swiat przesylek GL 

This library is made to share code and data between projects.

## Usage

This library is using [Gitlab Private Package Registry](https://docs.gitlab.com/ee/user/packages/package_registry/) for distribution.

Make sure that person who expected to use this library via composer has permissions in [Project members](https://gitlab.com/swiatprzesylek/gl/-/project_members)

To include this library add the code below to `repositories` section: 

```
  "repositories": [
        {
            "type": "composer",
            "url": "https://gitlab.com/api/v4/group/5620479/-/packages/composer/packages.json"
        }
    ],
```

Then run: 

```composer require swiatprzesylek/gl```


## Push a new tag

GL is using [Semantic Versioning](https://semver.org) naming convention.

New version of package is publishing automatically on each push tag via CI action `deploy_composer`. 

For details see `gitlab-ci.yml`


0. Changes should be merged into master BEFORE new tag


1. See list of existing tags:
```
git tag
```

2. Create a new tag:

```
git tag -a vX.X.X -m 'Desctiption what has been updated'
```

3. Push tag to origin:

```
git push origin --tags
```


## Run tests

```composer test```

