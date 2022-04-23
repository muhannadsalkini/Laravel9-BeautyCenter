<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}

    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Search service...">
    @if(!empty($query))
        <datalist id="mylist"><!-- when an option is selected -->
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
