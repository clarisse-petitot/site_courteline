<div class="py-5 lg:mx-auto lg:max-w-7xl lg:px-8">
    <div class="relative">
        <div class="relative w-full overflow-x-auto px-20">
            <ul role="list" class="inline-flex mx-0 grid sm:grid-cols-1 space-x-0 md:grid-cols-2 md:gap-x-10 lg:grid-cols-3 lg:gap-x-10">
                <?php
                foreach ($allcours as $cours) {
                ?>
                    <li class="inline-flex flex-col text-center w-auto p-5">
                        <div class="max-w-sm p-6 bg-blue-100 border rounded-lg ">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $cours->getHoraire()->getJour() ?> <?= getTraduction($cours->getDate()->format("j F")) ?></h5>
                            <p class="mb-3 font-normal text-gray-700">à <?= $cours->getHoraire()->getHeure() ?></p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                Prévenir mon abscence
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>