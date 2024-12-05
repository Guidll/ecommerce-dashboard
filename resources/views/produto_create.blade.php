@extends('layout')

@section('conteudo')
<div class="flex flex-col w-full h-full max-w-2xl mx-auto">
  <div class="flex items-center gap-3 mb-3">
    <a href="{{ route('produtos.index') }}" class="p-1 bg-white border border-solid rounded-md border-neutral-200">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
        <path fill-rule="evenodd" d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z" clip-rule="evenodd" />
      </svg>
    </a>
    <div class="flex items-center justify-between gap-6">
      <h2 class="flex items-center gap-1.5 text-xl font-medium">
        Produto
        <span class="px-2 py-1 text-xs bg-blue-300 rounded-lg">adicionar</span>
      </h2>
    </div>
  </div>
  @if (session()->has('message'))
    <div class="mb-3 shadow-lg rounded-xl">
      <div class="px-3 py-2 bg-amber-300 rounded-tl-xl rounded-tr-xl">Aviso</div>
      <div class="px-3 py-2 bg-white border border-gray-200 border-solid text-neutral-700 rounded-bl-xl rounded-br-xl">{{ session()->get('message') }}</div>
    </div>
  @endif
  <div class="p-3 overflow-hidden bg-white border border-gray-200 border-solid shadow-xl rounded-xl">
    <form action="{{ route('produtos.store') }}" method="POST">
      @csrf
      <div class="grid gap-3">
        <div class="grid gap-0.5">
          <label for="nome" class="text-xs">Nome do produto</label>
          <input id="nome" type="text" name="nome" class="grid px-3 py-2 border border-gray-200 border-solid rounded-lg">
        </div>
        <div class="grid gap-0.5">
          <label for="status" class="text-xs">Status</label>
          <select id="status" name="status" class="grid px-3 py-2 border border-gray-200 border-solid rounded-lg">
            <option value="1" selected>Ativo</option>
            <option value="0">Inativo</option>
          </select>
        </div>
        <div class="grid gap-0.5">
          <label for="estoque" class="text-xs">Estoque</label>
          <input id="estoque" type="text" name="estoque" class="grid px-3 py-2 border border-gray-200 border-solid rounded-lg">
        </div>
        <div class="grid gap-0.5">
          <label for="fornecedor" class="text-xs">Fornecedor</label>
          <input id="fornecedor" type="text" name="fornecedor" class="grid px-3 py-2 border border-gray-200 border-solid rounded-lg">
        </div>
      </div>
    </form>
  </div>
  <div class="flex justify-end mt-auto">
    <button type="button" onclick="document.querySelector('form').submit()" class="px-2.5 py-1.5 rounded-lg text-xs bg-neutral-800 text-neutral-50 hover:bg-neutral-700">Salvar</button>
  </div>
</div>
@endsection('conteudo')