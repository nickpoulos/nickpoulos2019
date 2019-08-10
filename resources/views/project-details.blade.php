
<div id="modal-content" class="fadeout">
    <template v-if="currentProject">
    <section class="bg-white">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <img :src="'/storage/' + currentProject.logo_image" alt="" class="project-logo mb-40">
                    <h3>@{{ currentProject.title }}</h3>
                    <p class="lead text-muted">@{{ currentProject.main_description }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="section-xs bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="image col-md-6">
                    <img :src="'/storage/' + currentProject.browser_image" style="top: 60px; left: -140px; position: relative;" alt="" class="zooming mb-40">
                </div>
                <div class="col-md-6">
                    <h1 class="text-lg">My Role</h1>
                    <p class="lead text-muted">@{{ currentProject.role_description }}</p>
                    <div class="row mt-40">
                        <div class="col-sm-6">
                            <dl class="description-2">
                                <dt>Client</dt>
                                <dd>@{{ currentProject.company }}</dd>
                                <dt>My Role</dt>
                                <dd>@{{ currentProject.role_title }}</dd>
                            </dl>
                        </div>
                        <div class="col-sm-6">
                            <dl class="description-2">
                                <dt>Tech Used</dt>
                                <dd><span class="label label-primary">Laravel</span> <span class="label label-primary">Vue</span></dd>
                                <dt>Date</dt>
                                <dd>@{{ currentProject.year }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="section-xs bg-white">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-6">
                    <h1>More Info</h1>
                    <div class="row mt-40">
                        <!-- Accordion -->
                        <div class="panel-group" id="more-info" role="tablist" aria-multiselectable="false">
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#features" aria-expanded="false">Partial Feature List</a>
                                    </h4>
                                </div>
                                <div id="features" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li v-for="feature in currentProject.features" v-html="bold(feature)"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#tech-specs" aria-expanded="false">Tech Specs</a>
                                    </h4>
                                </div>
                                <div id="tech-specs" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li v-for="spec in currentProject.specs" v-html="bold(spec)"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Panel -->
                            <div class="panel panel-2">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#more-info" href="#by-the-numbers" aria-expanded="false">By The Numbers</a>
                                    </h4>
                                </div>
                                <div id="by-the-numbers" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <ul class="accordion-list">
                                            <li v-for="fact in currentProject.facts" v-html="bold(fact)"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image col-sm-6 text-right">
                    <img :src="'/storage/' + currentProject.screen_image" style="position: relative; top: 30px; left: 25px;"  alt="" class="zooming mb-40">
                </div>
            </div>
        </div>
    </section>
    <!-- Section -->
    <section class="bg-light pt-45 pb-45">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 col-lg-push-2">
                    <div class="row">
                        <div v-if="currentProject.url" class="col-sm-6">
                            <a :href="currentProject.url" target="_blank" class="btn btn-primary btn-block">Visit Live Site</a>
                        </div>
                        <div class="col-sm-6">
                            <button @click="closeProjectDetails" class="btn btn-default btn-block">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </template>
</div>