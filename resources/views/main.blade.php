<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RiegApp</title>
    @include('links-and-scripts')
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      @include('lateral-bar')      
      {{-- Area principal --}}
      <div class="flex flex-col flex-1 w-full">
        @include('header')
       

        <main class="h-full overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-4xl font-semibold text-gray-700 dark:text-gray-200"
            >
              @yield('section-title')
            </h2>
            @yield('content')
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
