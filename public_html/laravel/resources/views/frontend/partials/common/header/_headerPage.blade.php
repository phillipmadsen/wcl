<!-- Page Header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <h1 itemprop="name">{{ $pageName }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb text-white link-white" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><i class="fa fa-home breadcrumb-home"></i>
                    <a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ route('home') }}">{{ trans('app.menu.home') }}</a>
                    <meta itemprop="position" content="1" />
                    </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <strong>{{ $pageNameBreadcrumb }}</strong>
                    <meta itemprop="position" content="2" />
                    </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- /Page Header -->
