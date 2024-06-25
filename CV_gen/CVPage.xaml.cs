using System;
using System.IO;
using Xamarin.Forms;

namespace MyApp
{
    public partial class CVPage : ContentPage
    {
        public CVPage(string cvData)
        {
            InitializeComponent();
            labelCV.Text = cvData;
        }

        protected override void OnAppearing()
        {
            base.OnAppearing();
            LoadDataFromFile();
        }

        private void LoadDataFromFile()
        {
            var documentsPath = Environment.GetFolderPath(Environment.SpecialFolder.LocalApplicationData);
            var filePath = Path.Combine(documentsPath, "cvdata.txt");

            if (File.Exists(filePath))
            {
                string data = File.ReadAllText(filePath);
                labelCV.Text = data;
            }
        }
    }
}
