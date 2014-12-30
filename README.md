Victoire CMS Markdown Bundle
============

Need to add a markdown in a victoire cms website ?
Get this markdown bundle and so on

First you need to have a valid Symfony2 Victoire edition.
Then you just have to run the following composer command :

    php composer.phar require victoire/markdown-bundle

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\MarkdownBundle\VictoireWidgetMarkdownBundle(),
            );

            return $bundles;
        }
    }

[![Licence Creative Commons](http://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png)](http://creativecommons.org/licenses/by-nc-nd/4.0/)

This product is provided under [Licence Creative Commns Attributions - No commercial use - No share 4.0 France](http://creativecommons.org/licenses/by-nc-nd/4.0/fr/) terms.
