#FilePointer Modes
ReadWrite	= "w+"
ReadOnly	= "r"
WriteOnly = "w"
# Configuration Attributes
RegData     = "RegistrationFile"
ParsedData  = "ParsedDataFile"
# Configuration File Defaults
ConfigFile 	        = "config.dat"
RegisteredChapters 	= "registeredChapters.dat"
ParsedDataFile 		  = "parsed.dat"

def printFile(fileName)
  IO.foreach(fileName) { |line| puts line.split("=") }
end

def initFile(fileName)
  unless File.file?(ConfigFile)
    File.new(fileName,WriteOnly)
  end
end

def readConfigFile
  # Hash will hold our configuration
  config = {}
	# Unless config file already exists
	# create a new one with default settings
	unless File.file?(ConfigFile)
		# Create default registration file
		initFile(RegisteredChapters)

		# Create default parsed file
    initFile(ParsedDataFile)

		configFile = File.open(ConfigFile,ReadWrite);
		configFile.puts RegData + "=" + RegisteredChapters
		configFile.puts ParsedData + "=" + ParsedDataFile
		configFile.close
	end
 
#  printFile(ConfigFile)

  IO.foreach(ConfigFile) do |line|
    line = line.split("=")
    attribute = line[0].strip
    value = line[1].strip

    config[attribute] = value
  end
  config
end

config = readConfigFile
puts config[RegData]
puts config[ParsedData]
