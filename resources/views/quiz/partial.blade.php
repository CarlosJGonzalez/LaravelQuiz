<ul>
@foreach($options as $option)
    <li class="nodisc">
        <input required id="radio{{$option->id}}" type="radio" name="opt-{{$question->id}}"><label class="m-2" for="radio{{$option->id}}">{{{ $option->option }}}</label>
    </li>
@endforeach
</ul>