using System;
using Xamarin.Forms;

namespace MyApp
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
        }

        private async void OnGenerateCVClicked(object sender, EventArgs e)
        {
            string name = entryName.Text;
            string email = entryEmail.Text;
            string phone = entryPhone.Text;
            string address = entryAddress.Text;
            string summary = editorSummary.Text;

            string cv = $"Nombre: {name}\nEmail: {email}\nTeléfono: {phone}\nDirección: {address}\nResumen: {summary}";

            await Navigation.PushAsync(new CVPage(cv));
        }
    }
}
