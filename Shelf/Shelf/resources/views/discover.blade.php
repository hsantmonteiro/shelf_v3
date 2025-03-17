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
        <header class="secondary-header">
            <div class="flex gap-200 ai-center">
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
                <form action="/logout" method="POST">
                    @csrf
                    <button class="btn btn--alert btn--fixed">Logout</button>
                </form>
            </div>
        </header>
        <aside class="primary-sidebar">
            <nav>
                <ul class="primary-sidebar__group">
                    <li>
                        <a href="/home" class="sidebar-item">
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
                                <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                <path
                                    d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"
                                ></path>
                                <path
                                    d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"
                                ></path>
                            </svg>
                            <span>Início</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="sidebar-item sidebar-item--active">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                fill="currentColor"
                                width="24"
                                height="24"
                            >
                                <path
                                    d="M17 3.34a10 10 0 1 1 -15 8.66l.005 -.324a10 10 0 0 1 14.995 -8.336zm-5 14.66a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm3.684 -10.949l-6 2a1 1 0 0 0 -.633 .633l-2.007 6.026l-.023 .086l-.017 .113l-.004 .068v.044l.009 .111l.012 .07l.04 .144l.045 .1l.054 .095l.064 .09l.069 .075l.084 .074l.098 .07l.1 .054l.078 .033l.105 .033l.109 .02l.043 .005l.068 .004h.044l.111 -.009l.07 -.012l.02 -.006l.019 -.002l.074 -.022l6 -2a1 1 0 0 0 .633 -.633l2 -6a1 1 0 0 0 -1.265 -1.265zm-1.265 2.529l-1.21 3.629l-3.629 1.21l1.21 -3.629l3.629 -1.21zm-9.419 1.42a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm14 0a1 1 0 1 0 0 2a1 1 0 0 0 0 -2zm-7 -7a1 1 0 1 0 0 2a1 1 0 0 0 0 -2z"
                                ></path>
                            </svg>
                            <span>Explorar</span>
                        </a>
                    </li>
                </ul>
                <button class="library-dropdown">
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
                </ul>
            </nav>
        </aside>
        <main class="ui-main main-body gap-700">
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
