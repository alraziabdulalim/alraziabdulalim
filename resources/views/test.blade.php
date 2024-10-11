@php
    $collection = collect([1, 2, 3, 4, 5]);

    @dump(
        $collection->take(3)->all()
    );
@endphp
