<div>
    <div class="input-group searchBar pt-5">
        <input wire:model.debounce.500ms="search" type="text" class="form-control" placeholder="Search for your content here.." id="searchM">
        <button class="btn btn-dark btn-lg" type="button" >Search</button>

    </div>
        @if(strlen($search) >= 2)
            <ul class="px-0 w-80 list-unstyled border border-dark border-3">
                @if($searchResults->count() > 0)
                    @foreach($searchResults as $result)
                        <li class="absolute p-2 border border-3 rounded">
                            <a href="{{route('movieapp.show',$result['id'])}}" class="link-unstyled">{{$result['title']}}</a>
                        </li>
                    @endforeach
                @else
                    <li class="absolute p-2 border border-3 rounded">
                        No results found for "{{$search}}"
                    </li>
                @endif
            </ul>
        @endif
</div>
