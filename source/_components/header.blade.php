<div class="bg-grey-lighter mb-8">
    <header class="container mx-auto px-4">
        <div class="sm:flex">
            <a href="/" class="inline-flex items-center w-full py-6 w-full font-bold">
                @include('_components.logo')
                <span class="pl-4">
                    {{ $page->blogTitle }}
                </span>
            </a>

            <nav class="sm:flex sm:flex-wrap sm:justify-end lg:w-full">
                <a href="/" class="flex items-center p-4">
                    Blog
                </a>
                <a href="/about" class="flex items-center p-4">
                    About
                </a>
                <a href="/contact" class="flex items-center p-4">
                    Contact
                </a>

                <form action="http://google.com/search" method="get" class="flex items-center px-2">
                    <fieldset role="search">
                        <input type="hidden" name="sitesearch" value="{{ $page->searchDomain }}">
                        <input type="text" name="q" results="0" placeholder="Search" class="p-1 border border-grey-dark">
                    </fieldset>
                </form>
            </nav>
        </div>
    </header>
</div>