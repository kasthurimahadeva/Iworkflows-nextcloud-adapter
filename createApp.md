# Create App
> We can generate and download a app using [create app](https://apps.nextcloud.com/developer/apps/generate) this link.

> After download the app, put that app in /var/www/html/nextcloud/apps/ path.

> The following directories have now been created:

    * appinfo/: Contains app metadata and configuration
    * css/: Contains the CSS
    * img/: Contains icons and images
    * js/: Contains the JavaScript files
    * lib/: Contains the PHP class files of your app
    * templates/: Contains the templates
    * tests/: Contains the tests

> Open appinfo/info.xml file and check whether these lines are in that file or not. If it is not add those lines.

```xml
<navigation>
    <name>MyApp</name>
    <route>myapp.page.index</route>
    <order>0</order>
</navigation>
```

**Note : In my file,**
```xml
<order>0</order>
```

**is *missing* and I added that line.**