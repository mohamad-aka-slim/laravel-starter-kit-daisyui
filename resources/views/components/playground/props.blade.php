@props([
    'items' => [],
])

<x-ui.table size="sm" class="rounded-lg border border-base-300">
    <thead>
        <tr>
            <th>Prop</th>
            <th>Values</th>
            <th>Purpose</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                <td><code>{{ $item['name'] }}</code></td>
                <td class="text-sm text-base-content/70">{{ $item['values'] }}</td>
                <td>{{ $item['description'] }}</td>
            </tr>
        @endforeach
    </tbody>
</x-ui.table>
