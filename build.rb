require 'erb'
require 'fileutils'

# Define the source and build directories
source_dir = '.'
build_dir = 'build'

# Create the build directory if it doesn't exist
Dir.mkdir(build_dir) unless Dir.exist?(build_dir)

# 1. Read the directory and return a list of *.erb files
erb_files = Dir.glob(File.join(source_dir, '*.erb'))

# 2. Load the content of each file and process it using ERB
erb_files.each do |file|
  content = File.read(file)
  result = ERB.new(content).result

  # Save the result into an html file in the build directory
  output_file = File.join(build_dir, File.basename(file, '.erb'))
  File.write(output_file, result)
end

# 3. Copy the specified directories into the build directory
['css', 'js', 'images'].each do |dir|
  source = File.join(source_dir, dir)
  destination = File.join(build_dir, dir)
  FileUtils.cp_r(source, destination) if Dir.exist?(source)
end

puts "Build completed!"

