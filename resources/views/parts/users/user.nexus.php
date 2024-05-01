<div class="border border-gray-300">
    <div class="flex items-center justify-center mt-8">
        <h1 class="text-2xl font-bold text-center">
            User details
        </h1>
    </div>
    <!--div class="border-b border-gray-400 my-4"></div-->

    <div class="mx-auto mb-8 relative">
        <table class="w-full">
            <tbody>
                <tr>
                    <td class="px-4 py-2 font-semibold">Username:</td>
                    <td class="px-4 py-2">JohnDoe</td>
                </tr>
                <tr>
                    <td class="px-4 py-2 font-semibold">Email:</td>
                    <td class="px-4 py-2 relative">
                        user@example.com
                        <button class="ml-2 px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600" onclick="toggleEmailForm()">Modifica</button>
                        <!--button class="ml-2 px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="closeEmailForm()">Cancella</button-->
                        <div id="emailForm" class="hidden fixed bg-white p-4 shadow-md border border-gray-300 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <!-- Form per la modifica dell'email -->
                            <input type="email" class="block w-full mb-2" placeholder="Vecchia email">
                            <input type="email" class="block w-full mb-2" placeholder="Nuova email">
                            <input type="email" class="block w-full mb-2" placeholder="Conferma nuova email">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Invia</button>
                            <button class="ml-2 px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="closeEmailForm()">Cancella</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="px-4 py-2 font-semibold">Password:</td>
                    <td class="px-4 py-2 relative">
                        ***********
                        <button class="ml-2 px-2 py-1 bg-blue-500 text-white rounded hover:bg-blue-600" onclick="togglePasswordForm()">Modifica</button>
                        <!--button class="ml-2 px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="closePasswordForm()">Cancella</button-->
                        <div id="passwordForm" class="hidden fixed bg-white p-4 shadow-md border border-gray-300 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <!-- Form per la modifica della password -->
                            <input type="password" class="block w-full mb-2" placeholder="Vecchia password">
                            <input type="password" class="block w-full mb-2" placeholder="Nuova password">
                            <input type="password" class="block w-full mb-2" placeholder="Conferma nuova password">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Invia</button>
                            <button class="ml-2 px-2 py-1 bg-red-500 text-white rounded hover:bg-red-600" onclick="closePasswordForm()">Cancella</button>
                        </div>
                    </td>
                </tr>
                <!-- Altri dettagli dell'account -->
            </tbody>
        </table>
    </div>
</div>