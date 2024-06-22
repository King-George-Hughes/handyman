<x-layout.admin-layout>
    <div class="flex flex-col">
        <div class="-m-1.5 overflow-x-auto">
          <div class="p-1.5 min-w-full inline-block align-middle">
            <div
              class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700"
            >
              <!-- Header -->
              <div
                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700"
              >
                <div>
                  <h2
                    class="text-xl font-semibold text-gray-800 dark:text-neutral-200"
                  >
                    Manage Users
                  </h2>
                </div>

                <div>
                  <div class="inline-flex gap-x-2">
                    <a
                      class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                      href="#"
                    >
                      View all
                    </a>

                    <a
                      class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-brightRed text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                      href="#"
                    >
                      <svg
                        class="flex-shrink-0 size-4"
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
                        <path d="M5 12h14" />
                        <path d="M12 5v14" />
                      </svg>
                      Create
                    </a>
                  </div>
                </div>
              </div>
              <!-- End Header -->

              <!-- Table -->
              <table
                class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700"
              >
                <thead class="bg-gray-50 dark:bg-neutral-900">
                  <tr>
                    <th scope="col" class="ps-6 py-3 text-start">
                      #
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span
                          class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                        >
                          Name
                        </span>
                      </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span
                          class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                        >
                          Email
                        </span>
                      </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span
                          class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                        >
                          Contact
                        </span>
                      </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-start">
                      <div class="flex items-center gap-x-2">
                        <span
                          class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                        >
                          Created at
                        </span>
                      </div>
                    </th>

                    <th scope="col" class="px-6 py-3 text-end">
                      <div class="flex items-center gap-x-2">
                        <span
                          class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200"
                        >
                          action
                        </span>
                      </div>
                    </th>
                  </tr>
                </thead>

                <tbody
                  class="divide-y divide-gray-200 dark:divide-neutral-700"
                >
                @php
                    $number = 1;
                @endphp
                  @forelse ($users as $user)
                  <tr>
                    <td class="size-px whitespace-nowrap">
                      <div class="ps-6 py-3">
                        {{$number++}}
                      </div>
                    </td>

                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span
                          class="text-sm text-gray-600 dark:text-neutral-400"
                          >{{$user->name}}</span
                        >
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <div class="flex items-center gap-x-2">
                          <div class="grow">
                            <span
                              class="text-sm text-gray-600 dark:text-neutral-400"
                              >{{$user->email}}</span
                            >
                          </div>
                        </div>
                      </div>
                    </td>

                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span
                          class="text-sm text-gray-600 dark:text-neutral-400"
                          >{{$user->contact ? $user->contact : 'N/A'}}</span
                        >
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span
                          class="text-sm text-gray-600 dark:text-neutral-400"
                          >{{$user->created_at}}</span
                        >
                      </div>
                    </td>
                    <td class="size-px whitespace-nowrap">
                        <div class="px-6 py-1.5">
                            <div
                                class="hs-dropdown [--placement:bottom-right] relative inline-block space-x-3">
                                <a href="/profile/{{ $user->id }}" target="_blank"
                                    class="text-green-600"><i class="fa-solid fa-eye"></i></a>
                                <a href="/job/{{ $user->id }}/edit"
                                    class="text-yellow-500"><i class="fa-solid fa-pen"></i></a>

                                <span x-data=""
                                    x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion-{{ $user->id }}')"
                                    class="cursor-pointer text-red-600"><i
                                        class="fa-solid fa-trash"></i></span>

                                <x-modal name="confirm-user-deletion-{{ $user->id }}"
                                    :show="$errors->userDeletion->isNotEmpty()" focusable>
                                    <form method="post"
                                        action="/job/{{ $user->id }}/delete"
                                        class="p-6">
                                        @csrf
                                        @method('delete')

                                        <h2 class="text-lg font-medium text-gray-900">
                                            Are you sure you want to delete <span
                                                class="text-brightRed">{{ $user->name }}</span>?
                                        </h2>

                                        <div class="w-full mt-6 flex justify-end">
                                            <x-secondary-button x-on:click="$dispatch('close')">
                                                {{ __('Cancel') }}
                                            </x-secondary-button>

                                            <x-danger-button class="ms-3">
                                                {{ __('Delete') }}
                                            </x-danger-button>
                                        </div>
                                    </form>
                                </x-modal>

                            </div>
                        </div>
                    </td>
                  </tr>
                  @empty
                      Nothing here...
                  @endforelse
                </tbody>
              </table>
              <!-- End Table -->

              <!-- Footer -->
              <div
                class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700"
              >
              </div>
              <!-- End Footer -->
            </div>
          </div>
        </div>
      </div>
</x-layout.admin-layout>