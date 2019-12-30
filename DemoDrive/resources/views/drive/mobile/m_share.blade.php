
@extends('layouts.app')

@section('content')

    <main id="m_main-drive">

        <!-- Left Sidebar -->

        @include('drive.shared.sidebar')


        <!-- Private Share -->

        @include('drive.shared.share')

    </main>

@endsection
