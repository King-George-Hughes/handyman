<x-layout.admin-layout>
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
      <!-- Card -->
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700"
      >
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p
              class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500"
            >
              Total users
            </p>
          </div>

          <div class="mt-1 flex items-center gap-x-2">
            <h3
              class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200"
            >
              {{$users_count}}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700"
      >
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p
              class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500"
            >
              Total Jobs
            </p>
          </div>

          <div class="mt-1 flex items-center gap-x-2">
            <h3
              class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200"
            >
              {{$jobs_count}}
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700"
      >
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p
              class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500"
            >
              Avg. Click Rate
            </p>
          </div>

          <div class="mt-1 flex items-center gap-x-2">
            <h3
              class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200"
            >
              56.8%
            </h3>
            <span class="flex items-center gap-x-1 text-red-600">
              <svg
                class="inline-block size-4 self-center"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              >
                <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                <polyline points="16 17 22 17 22 11" />
              </svg>
              <span class="inline-block text-sm"> 1.7% </span>
            </span>
          </div>
        </div>
      </div>
      <!-- End Card -->

      <!-- Card -->
      <div
        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700"
      >
        <div class="p-4 md:p-5">
          <div class="flex items-center gap-x-2">
            <p
              class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500"
            >
              Pageviews
            </p>
          </div>

          <div class="mt-1 flex items-center gap-x-2">
            <h3
              class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200"
            >
              92,913
            </h3>
          </div>
        </div>
      </div>
      <!-- End Card -->
    </div>
    <!-- End Grid -->
</x-layout.admin-layout>