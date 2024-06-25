using Xamarin.Forms;

namespace MyApp
{
    public partial class CVPage : ContentPage
    {
        public CVPage(string cv)
        {
            InitializeComponent();
            labelCV.Text = cv;
        }
    }
}
