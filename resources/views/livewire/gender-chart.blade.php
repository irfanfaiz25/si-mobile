<div>
    <div class="sm:block md:flex lg:flex p-4 rounded justify-center">
        <div class="w-full md:w-2/3">
            <h3 class="text-lg font-semibold mb-2">Grafik Jenis Kelamin Responden</h3>
            <canvas id="genderChart" class="chart"></canvas>
        </div>
        <div class="w-full md:w-1/3 px-3 py-10 space-y-4">
            <div class="flex justify-center items-center px-4 py-2 rounded-md w-full h-24 border-4 border-blue-400">
                <h3 class="text-lg font-semibold mb-2">{{ $maleRespondent }} Laki-Laki</h3>
            </div>
            <div class="flex justify-center items-center px-4 py-2 rounded-md w-full h-24 border-4 border-yellow-400">
                <h3 class="text-lg font-semibold mb-2">{{ $femaleRespondent }} Perempuan</h3>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        const male = @json($maleRespondent);
        const female = @json($femaleRespondent);

        const ctx = document.getElementById('genderChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Laki-laki',
                    'Perempuan'
                ],
                datasets: [{
                    label: ['Total'],
                    data: [male, female],
                    backgroundColor: [
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)'
                    ],
                    hoverOffset: 4
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
