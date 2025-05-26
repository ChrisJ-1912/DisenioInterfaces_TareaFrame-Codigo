@extends('layouts.app')
@vite('resources/js/components/box_text.js')

@section('title', 'Plan de estudio')

@section('content')
<body style="padding: 2rem; font-family: sans-serif;">
    <h1 style="font-size: 24px; text-align: center; font-weight: bold;">Plan de estudios</h1>
    <div style="max-width: 300px; position: absolute; top: 250px; left: 60px;">
        <custom-button label="Semestre 1"></custom-button>
        <custom-button label="Semestre 2"></custom-button>
        <custom-button label="Semestre 3"></custom-button>
        <custom-button label="Semestre 4"></custom-button>
        <custom-button label="Semestre 5"></custom-button>
        <custom-button label="Semestre 6"></custom-button>
        <custom-button label="Semestre 7"></custom-button>
        <custom-button label="Semestre 8"></custom-button>
    </div>

    <div style="display: flex; gap: 20px; max-width: 1300px; position: absolute; top: 210px; left: 430px;">
        <div style="width: 175px; aspect-ratio: 1;">
            <custom-square-button
                title="Materia"
                subtitle="Párrafo"
                icon="images/icon_pantalla.png"
            ></custom-square-button>
        </div>
        <div style="width: 175px; aspect-ratio: 1;">
            <custom-square-button
                title="Materia"
                subtitle="Tus datos"
                icon="images/icon_matriz.png"
            ></custom-square-button>
        </div>
        <div style="width: 175px; aspect-ratio: 1;">
            <custom-square-button
                title="Materia"
                subtitle="Configuración"
                icon="images/icon_pantalla.png"
            ></custom-square-button>
        </div>
        <div style="width: 175px; aspect-ratio: 1;">
            <custom-square-button
                title="Materia"
                subtitle="Cerrar sesión"
                icon="images/icon_operandos.png"
            ></custom-square-button>
        </div>
    </div>
    <div style="dmax-width: 1300px; position: absolute; top: 390px; left: 430px; vertical-align: bottom;">
        <h1 style="font-size: 24px; text-align: center; font-weight: bold";> Nombre materia </h1>
        <br>
        <div>
        <b>Código:</b><p style="float: right">0000251</p>
        <div>
    </div>

</body>
@endsection