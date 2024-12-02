@extends('layout')

@section('conteudo')
<div class="flex items-center justify-between gap-6 mb-3">
  <h2 class="text-xl font-medium">Produtos</h2>
  <div>
    <a href="{{ route('produtos.create') }}" class="px-2.5 py-1.5 rounded-lg text-xs bg-neutral-800 text-neutral-50 hover:bg-neutral-700">Adicionar produto</a>
  </div>
</div>
<div class="border border-solid border-neutral-200 rounded-xl">
  <table class="w-full text-left bg-white border-collapse border-solid shadow-xl border-colapse border1 border-neutral-200 rounded-xl">
    <thead class="bg-neutral-100">
      <tr class="border-b border-solid border-neutral-200">
        <th class="px-2 py-2 text-xs font-medium rounded-tl-xl">Ações</th>
        <th class="px-2 py-2 text-xs font-medium">Foto</th>
        <th class="px-2 py-2 text-xs font-medium min-w-[10rem]">Nome</th>
        <th class="px-2 py-2 text-xs font-medium">Status</th>
        <th class="px-2 py-2 text-xs font-medium">Estoque</th>
        <th class="px-2 py-2 text-xs font-medium rounded-tr-xl">Fornecedor</th>
      </tr>
    </thead>
    <tbody class="divide-y divide-solid divide-neutral-200">
      @foreach ($produtos as $produto)
      <tr class="">
        <td class="px-2 py-1.5">
          <div class="flex items-center gap-1">
            <a href="{{ route('produtos.edit', ['produto' => $produto->id]) }}" class="grid p-1 border border-solid rounded-lg border-neutral-200 place-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                <path d="M13.488 2.513a1.75 1.75 0 0 0-2.475 0L6.75 6.774a2.75 2.75 0 0 0-.596.892l-.848 2.047a.75.75 0 0 0 .98.98l2.047-.848a2.75 2.75 0 0 0 .892-.596l4.261-4.262a1.75 1.75 0 0 0 0-2.474Z" />
                <path d="M4.75 3.5c-.69 0-1.25.56-1.25 1.25v6.5c0 .69.56 1.25 1.25 1.25h6.5c.69 0 1.25-.56 1.25-1.25V9A.75.75 0 0 1 14 9v2.25A2.75 2.75 0 0 1 11.25 14h-6.5A2.75 2.75 0 0 1 2 11.25v-6.5A2.75 2.75 0 0 1 4.75 2H7a.75.75 0 0 1 0 1.5H4.75Z" />
              </svg>
              <span class="sr-only">Editar</span>
            </a>
            <form action="{{ route('produtos.destroy', ['produto' => $produto->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="grid p-1 border border-solid rounded-lg border-neutral-200 place-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                  <path fill-rule="evenodd" d="M5 3.25V4H2.75a.75.75 0 0 0 0 1.5h.3l.815 8.15A1.5 1.5 0 0 0 5.357 15h5.285a1.5 1.5 0 0 0 1.493-1.35l.815-8.15h.3a.75.75 0 0 0 0-1.5H11v-.75A2.25 2.25 0 0 0 8.75 1h-1.5A2.25 2.25 0 0 0 5 3.25Zm2.25-.75a.75.75 0 0 0-.75.75V4h3v-.75a.75.75 0 0 0-.75-.75h-1.5ZM6.05 6a.75.75 0 0 1 .787.713l.275 5.5a.75.75 0 0 1-1.498.075l-.275-5.5A.75.75 0 0 1 6.05 6Zm3.9 0a.75.75 0 0 1 .712.787l-.275 5.5a.75.75 0 0 1-1.498-.075l.275-5.5a.75.75 0 0 1 .786-.711Z" clip-rule="evenodd" />
                </svg>
                <span class="sr-only">Deletar</span>
              </button>
            </form>
          </div>
        </td>
        <td class="px-2 py-1.5">
          <div class="grid w-10 h-10 bg-white border border-solid rounded-lg border-neutral-200 place-content-center text-neutral-700">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
              <path fill-rule="evenodd" d="M2 4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4Zm10.5 5.707a.5.5 0 0 0-.146-.353l-1-1a.5.5 0 0 0-.708 0L9.354 9.646a.5.5 0 0 1-.708 0L6.354 7.354a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0-.146.353V12a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5V9.707ZM12 5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z" clip-rule="evenodd" />
            </svg>
          </div>
        </td>
        <?php
        $ativo = '<div class="px-2 py-1 text-xs bg-green-300 rounded-lg w-max">Ativo</div>';
        $inativo = '<div class="px-2 py-1 text-xs bg-red-300 rounded-lg w-max">Inativo</div>';
        ?>
        <td class="px-2 py-1.5">{{ $produto->nome }}</td>
        <td class="px-2 py-1.5">{!! $produto->status == '1' ? $ativo : $inativo !!}</td>
        <td class="px-2 py-1.5">{{ $produto->estoque }}</td>
        <td class="px-2 py-1.5">{{ !empty($produto->fornecedor) ? $produto->fornecedor : 'Não registrado' }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection('conteudo')