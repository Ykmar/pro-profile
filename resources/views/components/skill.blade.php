<div class="block">
    <div class="w-14 h-14 py-2 md:w-32 md:h-32 lg:w-32 lg:h-32 md:px-8 md:py-8 lg:px-8 lg:py-8 leading-none {{ $border }} border-b-8 rounded-t-3xl rounded-b-3xl text-white {{ $background }} text-center m-auto">
        <i class="{{ $icon }} text-3xl md:mb-2 lg:mb-2"></i>
        <p class="hidden md:block lg:block">{{ __('resume.index.skills.' . $skill) }}</p>
    </div>
    <p class="w-16 block md:hidden lg:hidden font-bold text-xs text-[#1747B5]">{{ __('resume.index.skills.' . $skill) }}</p>
</div>
