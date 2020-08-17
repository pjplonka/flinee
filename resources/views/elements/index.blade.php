@extends('admin.layout')

@section('title', 'Elements list')

@section('content')
    <div class="flex">
        <div class="w-1/2">

            <div class="card">

                <div class="c-header"><h3 class="c-title">Elements list</h3></div>

                <div class="c-body">
                    @forelse ($elements as $element)
                        <div class="simple-list">
                            <div class="sl-item relative">
                                {{ $element->id }}
                                <a href="/elements/{{ $element->id }}/edit">Edit</a>
                                <form class="absolute" style="top:0; right: 0;" action="/elements/{{ $element->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="absolute delete-prompt" style="top:8px; right: 0;" type="submit">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p style="font-weight: 300;">No elements yet.</p>
                    @endforelse
                </div>

                <div class="c-footer">
                    <div>
                        <a href="/elements/create" class="btn btn-p">Add new</a>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
