<div>
    <h1>
        @if (count($hobi) == 1)
            Aku punya 1 hobi
        @elseif (count($hobi) > 1)
            Aku punya beberapa hobi
        @else
            Aku gapunya hobi
        @endif
    </h1>
</div>

