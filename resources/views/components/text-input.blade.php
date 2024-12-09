@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-[#FF852F] focus:ring-[#FF852F] rounded-md shadow-sm']) }}>
