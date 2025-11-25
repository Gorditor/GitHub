using System.Text.Json.Serialization;

namespace DigiAPI
{

    public class Digimon
    {
        [JsonPropertyName("name")]
        public string Name { get; set; } = "";

        [JsonPropertyName("levels")]
        public List<DigimonLevelSlot> Levels { get; set; } = new();

        [JsonPropertyName("types")]
        public List<DigimonTypeSlot> Types { get; set; } = new();

        
    }
        public class DigimonLevelSlot
    {
        [JsonPropertyName("id")]
        public int ID { get; set; }

        [JsonPropertyName("level")]
        public string Level { get; set; } = "";
      
    }

        public class DigimonTypeSlot
    {
        [JsonPropertyName("id")]
        public int ID { get; set; }

        [JsonPropertyName("type")]
        public string Type { get; set; } = "";
      
    }

    public class SavedItem
    {
        public string Name { get; set; } = "";
        public string Level { get; set; } = "";
        public string Type { get; set; } = "";

    }
}
