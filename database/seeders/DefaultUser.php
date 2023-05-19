use Illuminate\Database\Seeder;
use App\Models\PointHome; // Ganti dengan model yang sesuai

class DefaultPoints extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (PointHome::count() === 0) {
            PointHome::create([
                'id' => '1',
                'title' => 'Terakreditasi A',
                'desc' => 'TBD',
            ]);

            // Tambahkan data lainnya sesuai kebutuhan
        }
    }
}
