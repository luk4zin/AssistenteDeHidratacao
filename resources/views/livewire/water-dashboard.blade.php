<div>
    <h1>Sugestão Personalizada de Hidratação</h1>

    <button wire:click="generateWaterSuggestion">Gerar Sugestão</button>

    @if($suggestion)
        <p>{{ $suggestion }}</p>
    @endif
</div>
