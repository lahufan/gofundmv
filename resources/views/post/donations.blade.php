{{-- alternative working method --}}
{{-- @forelse($donations as $donation)
    <li>{{ $donation->amount }}</li>
@empty
    <p>No donations yet.</p>
@endforelse --}}
@forelse ($donations as $donation)
    <li>Amount: {{ $donation->amount }}</li>
@empty
    <li>No Donations yet...</li>
@endforelse