<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard E-commerce</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <style>
      .main-grid{
        grid-template-rows: auto 1fr;
      }
    </style>
  </head>
  <body class="font-[Inter] grid min-h-screen text-sm bg-neutral-50 text-neutral-900">
    <div class="grid h-full main-grid">
      <header class="grid px-3 py-2 h-14 bg-neutral-900 text-neutral-50">
        <div class="grid w-full">
          <div class="flex items-center gap-6">
            <h1 class="text-lg font-medium">Dashboard</h1>
            <div class="grid grow">
              <div class="mx-auto w-full max-w-[45rem] px-3 py-2 transition-colors rounded-lg cursor-pointer bg-neutral-800 hover:bg-neutral-700">
                <div class="flex items-center gap-1 text-neutral-300">
                  <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                  </svg>
                  <div>Explorar</div>
                </div>
              </div>
            </div>
            <div class="flex items-center gap-1">
              <div class="grid w-8 h-8 text-xs uppercase rounded-lg place-content-center text-neutral-900 bg-sky-500">MI</div>
              <div>Minha loja</div>
            </div>
          </div>
        </div>
      </header>

      <div class="flex bg-neutral-900">
        <aside class="flex flex-col px-1 py-3 rounded-tl-xl w-52 bg-neutral-200 shrink-0">
          <div class="grid gap-1 font-medium">
            <div class="px-3 py-1 rounded-lg">Inicio</div>
            <div class="px-3 py-1 rounded-lg">Pedidos</div>
            <div class="px-3 py-1 font-bold rounded-lg bg-neutral-50">Produtos</div>
            <div class="px-3 py-1 rounded-lg">Clientes</div>
            <div class="px-3 py-1 rounded-lg">Fornecedores</div>
            <div class="h-px bg-neutral-300"></div>
            <div class="px-3 py-1 rounded-lg">Descontos</div>
            <div class="px-3 py-1 rounded-lg">Marketing</div>
            <div class="px-3 py-1 rounded-lg">Gráficos</div>
          </div>
          <div class="flex items-center gap-1 px-3 py-1 mt-auto font-medium rounded-lg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-4">
              <path fill-rule="evenodd" d="M7.84 1.804A1 1 0 0 1 8.82 1h2.36a1 1 0 0 1 .98.804l.331 1.652a6.993 6.993 0 0 1 1.929 1.115l1.598-.54a1 1 0 0 1 1.186.447l1.18 2.044a1 1 0 0 1-.205 1.251l-1.267 1.113a7.047 7.047 0 0 1 0 2.228l1.267 1.113a1 1 0 0 1 .206 1.25l-1.18 2.045a1 1 0 0 1-1.187.447l-1.598-.54a6.993 6.993 0 0 1-1.929 1.115l-.33 1.652a1 1 0 0 1-.98.804H8.82a1 1 0 0 1-.98-.804l-.331-1.652a6.993 6.993 0 0 1-1.929-1.115l-1.598.54a1 1 0 0 1-1.186-.447l-1.18-2.044a1 1 0 0 1 .205-1.251l1.267-1.114a7.05 7.05 0 0 1 0-2.227L1.821 7.773a1 1 0 0 1-.206-1.25l1.18-2.045a1 1 0 0 1 1.187-.447l1.598.54A6.992 6.992 0 0 1 7.51 3.456l.33-1.652ZM10 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
            </svg>
            Configurações
          </div>
        </aside>

        <main class="grid p-3 rounded-tr-xl bg-neutral-50 grow">
          <div class="flex flex-col w-full h-full grow">
            @yield('conteudo')
          </div>
        </main>
      </div>
    </div>
  </body>
</html>