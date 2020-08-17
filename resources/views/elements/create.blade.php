@extends('admin.layout')

@section('title', 'Create element')

@section('content')
    <div class="flex">
        <div class="w-1/2 ml-6">

            <form action="/elements" method="post">

                @csrf

                <div class="card">

                    <div class="c-header"><h3 class="c-title">Add new element</h3></div>

                    <div class="c-footer">
                        <div>
                            <button id="submit-create" class="btn btn-p" type="submit">Submit</button>
                        </div>
                    </div>

                </div>

            </form>

        </div>
    </div>
@endsection
