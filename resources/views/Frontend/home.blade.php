@extends('Frontend.assets.layouts')
@section('page_title')
    Blog Home
@endsection
@section('content')

                    <header class="py-5 bg-light border-bottom mb-4">
                        <div class="container">
                            <div class="text-center my-5">
                                <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                                <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
                            </div>
                        </div>
                    </header>
                    <!-- Nested row for non-featured blog posts-->
                    <div class="row">
                        <x-post-template post-title="Lorem ipsum dolor sit amet,">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odit sit saepe. Distinctio officia deserunt nihil tempore modi laudantium totam earum quam quod. Tempore fuga dolores, cumque optio culpa quibusdam!
                        </x-post-template>

                        <x-post-template post-title="Lorem ipsum dolor sit amet,">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit odit sit saepe. Distinctio officia deserunt nihil tempore modi laudantium totam earum quam quod. Tempore fuga dolores, cumque optio culpa quibusdam!
                        </x-post-template>

                    </div>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>

@endsection
