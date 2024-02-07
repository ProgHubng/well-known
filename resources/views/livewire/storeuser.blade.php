<form class="w-full max-w-md rounded-lg overflow-hidden py-1 space-y-6 relative bg-transparent px-2" wire:submit.prevent="save">


                <div class="relative">

                    <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold" for="phone_no">Mobile
                        Number</label>
                    <input class="block w-full text-xs text-gray-700 px-1 py-4 h-12  border-b border-0 border-gray-300 bg-transparent
    focus:ring-0 ring-0 font-medium focus:outline-none focus:outline-none" id="phone_no" inputmode="tel"
                        name="phone_no" placeholder="Enter your mobile number" required type="text" wire:model="phone_number">


                </div>






                <div class="relative">

                    <label class="pb-1 text-gradient-100 block text-xs tracking-normal font-semibold"
                        for="password">Password</label>
                    <input class="block w-full text-xs text-gray-700 px-1 py-4 h-12  border-b border-0 border-gray-300 bg-transparent
focus:ring-0 ring-0 font-medium focus:outline-none focus:outline-none" id="password" name="password"
                        placeholder="Enter your password" required type="password" wire:model="password">


                </div>






                <div class="relative">
                    <input class="h-12 rounded-full text-white block w-full tracking-normal bg-gradient-100 items-center justify-center box-content py-1
focus:ring-4 focus:outline-none outline-none focus:ring-opacity-50 mx-auto font-semibold btn" id="submit" name="submit"
                        type="submit" value="Register">
                </div>





            </form>
