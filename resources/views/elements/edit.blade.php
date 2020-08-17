@extends('admin.layout')

@section('title', 'Edit element')

@section('content')
    <div class="flex">
        <div class="w-1/2 ml-6">

            <form action="/elements/{{ $element->id }}" method="post">

                @csrf
                @method('put')

                <div class="card">

                    <div class="c-header"><h3 class="c-title">Edit element {{ $element->id }}</h3></div>

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
