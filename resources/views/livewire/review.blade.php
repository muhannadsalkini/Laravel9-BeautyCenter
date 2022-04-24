<div>
    {{-- Do your work, then step back. --}}
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="review-form">
        <form wire:submit.prevent="store">
            @auth
            <div class="star-box fix">
                <h4>your Rating</h4>
                <select wire:model="rate">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="input-box-2 fix">
                <div class="input-box float-left">
                    <input wire:model="subject" placeholder="Subject" type="text">
                    @error('subject') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="input-box review-box fix">
                <textarea wire:model="review" placeholder="Write your review"></textarea>
                @error('review') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="input-box submit-box fix">
                <input value="submit review" type="submit">
            </div>
            @else
                <div class="input-box submit-box fix">
                    <a href="/login" ><input value="Login for review"></a>
                </div>
            @endauth
        </form>
    </div>

</div>
