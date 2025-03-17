<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Shelf</title>
        <link rel="stylesheet" href="style/style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
        />
        <link rel="icon" href="../assets/favicon.ico" type="image/x-icon" />
        @vite('resources/js/app.js')
    </head>
    <body class="ui-grid">
        <a href="#main-content" class="btn btn--primary skip-to-content">Ir para o conteúdo principal</a>
        <header class="secondary-header">
            <div class="flex gap-400 ai-center">
                <button
                    class="sidebar-toggle"
                    aria-controls="primary-sidebar"
                    aria-expanded="false"
                >
                    <span class="sr-only">Menu</span>
                </button>
                <a href="/home" class="secondary-header__logo"
                    ><img
                        src="../assets/svg/logo-black.svg"
                        alt="Logo do Shelf"
                /></a>
            </div>
            <div class="flex gap-400 ai-center">
                <button class="icon-btn notif-btn">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        width="24"
                        height="24"
                        stroke-width="2"
                    >
                        <path
                            d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"
                        ></path>
                        <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                    </svg>
                </button>
                <button class="profile-btn">
                    <img
                        src="../assets/img/blank-pfp.png"
                        alt="Sua foto de perfil"
                    />
                </button>
            </div>
        </header>
        <aside class="primary-sidebar" data-visible="false">
            <div class="primary-sidebar__header flex gap-400 ai-center">
                <button
                    class="close-menu"
                    aria-controls="primary-sidebar"
                    aria-expanded="true"
                >
                    <span class="sr-only">Fechar</span>
                </button>
                <a href="/home" class="secondary-header__logo"
                    ><img
                        src="../assets/svg/logo-black.svg"
                        alt="Logo do Shelf"
                /></a>
            </div>
            <nav>
                <ul class="primary-sidebar__group">
                    <li>
                        <a
                            href="/home"
                            class="sidebar-item sidebar-item--active"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                width="24"
                                height="24"
                            >
                                <path
                                    d="M12.707 2.293l9 9c.63 .63 .184 1.707 -.707 1.707h-1v6a3 3 0 0 1 -3 3h-1v-7a3 3 0 0 0 -2.824 -2.995l-.176 -.005h-2a3 3 0 0 0 -3 3v7h-1a3 3 0 0 1 -3 -3v-6h-1c-.89 0 -1.337 -1.077 -.707 -1.707l9 -9a1 1 0 0 1 1.414 0m.293 11.707a1 1 0 0 1 1 1v7h-4v-7a1 1 0 0 1 .883 -.993l.117 -.007z"
                                ></path>
                            </svg>
                            <span>Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="discover" class="sidebar-item">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                width="24"
                                height="24"
                                stroke-width="2"
                            >
                                <path d="M8 16l2 -6l6 -2l-2 6l-6 2"></path>
                                <path
                                    d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0"
                                ></path>
                                <path d="M12 3l0 2"></path>
                                <path d="M12 19l0 2"></path>
                                <path d="M3 12l2 0"></path>
                                <path d="M19 12l2 0"></path>
                            </svg>
                            <span>Explorar</span>
                        </a>
                    </li>
                </ul>
                <button class="library-dropdown">
                    <div class="library-dropdown__img">
                        <img
                            src="../assets/img/bookshelf.png"
                            alt="Sua foto de perfil"
                        />
                    </div>
                    <span>Nome da Biblioteca</span>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        width="24"
                        height="24"
                        stroke-width="2"
                    >
                        <path d="M6 9l6 6l6 -6"></path>
                    </svg>
                </button>
                <div class="flex-column jc-space-between">
                    <ul class="primary-sidebar__group">
                        <li>
                            <a href="#" class="sidebar-item">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    width="24"
                                    height="24"
                                    stroke-width="2"
                                >
                                    <path
                                        d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"
                                    ></path>
                                    <path
                                        d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z"
                                    ></path>
                                    <path d="M5 8h4"></path>
                                    <path d="M9 16h4"></path>
                                    <path
                                        d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z"
                                    ></path>
                                    <path d="M14 9l4 -1"></path>
                                    <path d="M16 16l3.923 -.98"></path>
                                </svg>
                                <span>Livros</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item">
                                <svg
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M20 12V17C20 18.8856 20 19.8284 19.4142 20.4142C18.8284 21 17.8856 21 16 21H6.5C5.11929 21 4 19.8807 4 18.5M20 12C20 13.8856 20 14.8284 19.4142 15.4142C18.8284 16 17.8856 16 16 16H6.5C5.11929 16 4 17.1193 4 18.5M20 12V7C20 5.11438 20 4.17157 19.4142 3.58579C18.8284 3 17.8856 3 16 3H8C6.11438 3 5.17157 3 4.58579 3.58579C4 4.17157 4 5.11438 4 7V18.5"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    />
                                    <path
                                        d="M9 10L10.2929 11.2929C10.6834 11.6834 11.3166 11.6834 11.7071 11.2929L15 8"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                    />
                                </svg>
                                <span>Devoluções</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    width="24"
                                    height="24"
                                    stroke-width="2"
                                >
                                    <path
                                        d="M4 18v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"
                                    ></path>
                                    <path d="M7 14l3 -3l2 2l3 -3l2 2"></path>
                                </svg>
                                <span>Estatísticas</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sidebar-item">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    width="24"
                                    height="24"
                                    stroke-width="2"
                                >
                                    <path
                                        d="M4 10a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"
                                    ></path>
                                    <path d="M6 4v4"></path>
                                    <path d="M6 12v8"></path>
                                    <path
                                        d="M10 16a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"
                                    ></path>
                                    <path d="M12 4v10"></path>
                                    <path d="M12 18v2"></path>
                                    <path
                                        d="M16 7a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"
                                    ></path>
                                    <path d="M18 4v1"></path>
                                    <path d="M18 9v11"></path>
                                </svg>
                                <span>Regras</span>
                            </a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button
                                    class="sidebar-item sidebar-item--alert margin-top-auto"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        width="24"
                                        height="24"
                                        stroke-width="2"
                                    >
                                        <path
                                            d="M10 8v-2a2 2 0 0 1 2 -2h7a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-7a2 2 0 0 1 -2 -2v-2"
                                        ></path>
                                        <path d="M15 12h-12l3 -3"></path>
                                        <path d="M6 15l-3 -3"></path>
                                    </svg>
                                    <span>Sair</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </aside>
        <main class="ui-main main-body gap-700" id="main-content">
            <header class="flex jc-space-between ai-center">
                <h1 class="fs-heading-2 fw-bold">
                    Olá,
                    <!-- Primeiro nome do user -->
                </h1>
                <div class="flex gap-200">
                    <button class="btn btn--primary btn--small">
                        Criar biblioteca
                    </button>
                    <button class="btn btn--secondary btn--small">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="3"
                        >
                            <path
                                d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"
                            ></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                        <span>Buscar bibliotecas</span>
                    </button>
                </div>
            </header>
            <div>
                <h2 class="fs-heading-3 fw-bold">Suas bibliotecas</h2>
            </div>
            <div>
                <h2 class="fs-heading-3 fw-bold">Bibliotecas que faz parte</h2>
            </div>
        </main>
    </body>
</html>
