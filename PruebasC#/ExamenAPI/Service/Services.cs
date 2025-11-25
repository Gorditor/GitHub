
using System;
using System.Linq;
using System.Net.Http;
using System.Text.Json;
using System.Threading.Tasks;
using DigiAPI;

namespace DigiAPI.Services
{
    public class ApiService
    {
        private readonly HttpClient client = new HttpClient
        {
            BaseAddress = new Uri("https://digi-api.com")
        };

        public async Task<SavedItem?> GetItemAsync(string parameter)
        {
            string endpoint = $"/api/v1/digimon/{parameter.ToLower()}";

            HttpResponseMessage response = await client.GetAsync(endpoint);

            if (!response.IsSuccessStatusCode)
                return null;

            string content = await response.Content.ReadAsStringAsync();

            Digimon? apiResponse = JsonSerializer.Deserialize<Digimon>(content);

            if (apiResponse == null)
                return null;

            return new SavedItem
            {
                Name   = apiResponse.Name,
                Level = apiResponse.Levels.First().Level,
                Type = apiResponse.Types.First().Type
            };
        }
    }
}
