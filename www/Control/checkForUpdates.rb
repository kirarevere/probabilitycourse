# Requires
require 'pathname'
# FilePointer Modes
ReadWrite	= "w+"
ReadOnly	= "r"
WriteOnly = "w"
Append    = "a"
# Configuration Attributes
RegData     = "RegistrationFile"
ParsedData  = "ParsedDataFile"
# Configuration File Defaults
ConfigFile 	        = "config.dat"
RegisteredChapters 	= "registeredChapters.dat"
ParsedDataFile 		  = "parsed.dat"

def registerChapter(name,location)
  regFile = File.open(RegisteredChapters,Append)
  regFile.puts("#{name},#{location}") 
  regFile.close
end

def printFile(fileName)
  IO.foreach(fileName) { |line| puts line }
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
 
  IO.foreach(ConfigFile) do |line|
    line = line.split("=")
    attribute = line[0].strip
    value = line[1].strip

    config[attribute] = value
  end
  config
end

config = readConfigFile
registerChapter("one",Pathname.new("../chapter1"));

Pathname("../chapter1").each_entry { |f| p f }
printFile(config[RegData])
