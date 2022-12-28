<div class="d-flex justify-content-between mb-2">
    <label {{ $labelAtributes }} for="{{$name}}">{{$label}}</label>
    <select id="{{ $id }}" name="{{$name}}" {{ $attributes }}>
        @foreach (json_decode($options) as $key =>  $elem)
        <option value="{{$key}}">{{$elem}}</option>
        @endforeach
    </select>
</div>

<script>
    $(document).ready(function() {
        $('#{{ $id }}').select2();
    });
</script>
