@extends('theme.master')
@section('title', 'My Blogs')

@section('content')
    @include('theme.partials.hero', ['title' => 'My Blogs'])

    <!-- ================ contact section start ================= -->
    <section class="section-margin--small section-margin">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session('blogDeleteStatus'))
                        <div class="alert alert-success">
                            {{ session('blogDeleteStatus') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Title</th>
                                <th scope="col" width="15%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($blogs) > 0)
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>
                                            <a href="{{ route('blogs.show', ['blog' => $blog]) }}"
                                                target="_blank">{{ $blog->name }}</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('blogs.edit', ['blog' => $blog]) }}"
                                                class="btn btn-sm btn-primary mr-2">Edit</a>
                                            <form action="{{ route('blogs.destroy', ['blog' => $blog]) }}" method="post"
                                                id="delete_form" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <a href="javascript:$('form#delete_form').submit();"
                                                    class="btn btn-sm btn-danger mr-2">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    @if (count($blogs) > 0)
                        {{ $blogs->render('pagination::bootstrap-4') }}
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
@endsection
