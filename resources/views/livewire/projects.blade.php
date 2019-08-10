<section id="portfolio" class="section cover bg-black">

    <!-- Filter Bar -->
    <nav class="filter-bar bg-primary dark">
        <div class="tabs-wrapper">
            <ul class="filter nav nav-tabs" data-filter-list="#works-list">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".webdesign">Webdesign</a></li>
                <li><a href="#" data-filter=".mobileApps">Mobile Apps</a></li>
                <li><a href="#" data-filter=".socialMedia">Social Media</a></li>
            </ul>
            <span class="selector"></span>
        </div>
    </nav>

    <!-- Works List -->
    <div v-masonry v-images-loaded:on.progress="imageProgress" id="works-list" class="filter-list row masonry no-spaces" transition-duration="0.3s" column-width=".masonry-sizer" item-selector=".masonry-item">
        <div class="masonry-sizer col-md-4 col-sm-6 col-xs-12"></div>
        <div wire:click="showProject" v-masonry-tile v-for="(project, index) in projects" class="mobileApps masonry-item col-md-4 col-sm-6 col-xs-12">
            <div class="image-box">
                <a :href="'https://nickpoulos2019.local/project/' + index" data-toggle="ajax-modal" class="full">
                    <div class="image"><img :src="'/img/projects/' +  project.image" alt=""></div>
                    <div class="hover">
                        <h4 class="mb-0">@{{ project.name  }}</h4>
                        <span class="text-muted">@{{ project.category }}</span>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>