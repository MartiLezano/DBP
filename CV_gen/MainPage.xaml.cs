// MainPage.xaml.cs
using MyApp;
using System;
using System.IO;
using Xamarin.Forms;

namespace CV_gen
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

            if (string.IsNullOrWhiteSpace(name) ||
                string.IsNullOrWhiteSpace(email) ||
                string.IsNullOrWhiteSpace(phone) ||
                string.IsNullOrWhiteSpace(address) ||
                string.IsNullOrWhiteSpace(summary))
            {
                await DisplayAlert("Error", "Todos los campos son obligatorios", "OK");
                return;
            }

            string cv = $"Nombre: {name}\nEmail: {email}\nTeléfono: {phone}\nDirección: {address}\nResumen: {summary}";

            // Guardar datos en un archivo de texto
            SaveDataToFile(cv);

            // Navegar a la página CVPage
            await Navigation.PushAsync(new CVPage(cv));
        }

        private void SaveDataToFile(string data)
        {
            var documentsPath = Environment.GetFolderPath(Environment.SpecialFolder.LocalApplicationData);
            var filePath = Path.Combine(documentsPath, "cvdata.txt");

            File.WriteAllText(filePath, data);
        }
    }
}
