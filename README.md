To install this bundle just do the following:

* Add it in a suitable folder of your project
`    git submodule add git://github.com/Astrac/A2PLabServiceProfilerBundle.git vendor/bundles/A2PLab/ServiceProfilerBundle`
* Add an according autoloading entry for the A2PLab namespace
`    'A2PLab' => __DIR__.'../vendor/bundles/`
* Register bundle in your AppKernel
`    new A2PLab\ServiceProfilerBundle\ServiceProfilerBundle()`
* Add in your config.yml this entry:
`    service_profiler: ~`
