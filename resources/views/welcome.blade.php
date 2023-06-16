<!DOCTYPE html>
<html>
<head>
    <title>Notícias UMFG</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #000;
            width: 300px;
        }
Copy code
    .content {
        margin-left: 400px;
        margin-right: 400px;
    }
</style>
</head>
<body class="bg-gray-100">
    <div class="sidebar bg-black w-16 h-screen fixed top-0 left-0"></div>
    <div class="sidebar bg-black w-16 h-screen fixed top-0 right-0"></div>
    <div class="content mx-auto">
        <div class="flex justify-between items-center bg-gray-300 px-4 py-2">
            <div class="flex items-center">
                <img src="https://cursos.umfg.edu.br/wp-content/themes/facec-cursos/assets/img/logo-cinza2.png" alt="Logo" class="w-22 h-12">
                <div class="font-bold ml-4">| Info</div>
            </div>
            <a href="{{ route('admin.dashboard') }}">ACESSAR ÁREA ADMINISTRATIVA</a>
        </div>
        <img src="https://umfg.edu.br/wp-content/uploads/2020/03/foto-novo-campus-scaled.jpg" alt="Faculdade" class="w-full h-80 object-cover">
        <h1 class="text-3xl font-bold mt-8">| NOTÍCIAS UMFG</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8 mx-4">
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 1" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 2" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 3" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 4" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 5" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2023/05/version1uuidAB6E5A0F-0C20-4C7E-8F1D-D6EBF235DA06modecompatiblenoloc0.jpeg.jpg" alt="Imagem 6" class="mx-auto w-62 h-48">
                <p class="text-lg font-bold">Dia da Luta Antimanicomial</p>
                <p class="text-gray-500">A data, que integra o movimento da reforma psiquiátrica no Brasil, busca, sobretudo, combater o estigma e a exclusão de pessoas com sofrimento psíquico grave, em nome de pretensos tratamentos, garantindo-lhes direitos.</p>
                <div class="flex justify-end">
                    <a href="#" class="text-blue-500 hover:underline">Saiba mais...</a>
                </div>
            </div>
        </div>
        <h2 class="text-3xl font-bold mt-8">| UMFG CURSOS</h2>
        <div class="grid grid-cols-3 gap-6 mt-8 mx-4">
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2021/01/icon-administracao.png" alt="Imagem Administração" class="mx-auto w-24 h-24">
                <p class="text-lg font-bold">Administração</p>
                <p class="text-gray-500">Formação profissional de alto nível, com capacidade crítica e reflexiva de suas responsabilidades.</p>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2020/12/icon-fisioterapia-ortopedica-amarelo.png" alt="Imagem Fisioterapia" class="mx-auto h-24">
                <p class="text-lg font-bold">Fisioterapia</p>
                <p class="text-gray-500">Formação profissional de alto nível, com capacidade crítica e reflexiva de suas responsabilidades.</p>
            </div>
            <div class="bg-white border border-gray-300 p-4 text-center">
                <img src="https://umfg.edu.br/wp-content/uploads/2021/01/icon-analise-e-desenvolvimento-de-sistemas.png" alt="Imagem ADS" class="mx-auto w-24 h-24">
                <p class="text-lg font-bold">ADS</p>
                <p class="text-gray-500">Formação profissional de alto nível, com capacidade crítica e reflexiva de suas responsabilidades.</p>
            </div>
        </div>
        <div class="bg-gray-300 px-4 py-2 mt-8 flex justify-center">
            <img src="https://cursos.umfg.edu.br/wp-content/themes/facec-cursos/assets/img/logo-cinza2.png" alt="Logo" class="w-22 h-12">
        </div>
    </div>
</body>
</html>